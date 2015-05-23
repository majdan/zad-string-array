Feature: Konwersja jednostek

  Scenario: Konwersja jednostek
    Given I am on homepage
    When I follow "Konwersja jednostek by majdan"
    And I fill in "Dane" with "1"
    And I fill in "Z" with "kB"
    And I fill in "Na" with "B"
    And I press "Przelicz"
    Then I should see "Wynik konwersji wynosi: 1024"
