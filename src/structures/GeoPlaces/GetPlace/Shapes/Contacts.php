<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\GetPlace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContactDetails> $Phones
 * @property list<ContactDetails> $Faxes
 * @property list<ContactDetails> $Websites
 * @property list<ContactDetails> $Emails
 */
class Contacts extends Shape
{
    /**
     * @param array{
     *     Phones?: list<ContactDetails>,
     *     Faxes?: list<ContactDetails>,
     *     Websites?: list<ContactDetails>,
     *     Emails?: list<ContactDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
