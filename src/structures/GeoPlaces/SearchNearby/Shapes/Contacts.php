<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchNearby\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContactDetails>|null $Phones
 * @property list<ContactDetails>|null $Faxes
 * @property list<ContactDetails>|null $Websites
 * @property list<ContactDetails>|null $Emails
 */
class Contacts extends Shape
{
    /**
     * @param array{
     *     Phones?: list<ContactDetails>|null,
     *     Faxes?: list<ContactDetails>|null,
     *     Websites?: list<ContactDetails>|null,
     *     Emails?: list<ContactDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
