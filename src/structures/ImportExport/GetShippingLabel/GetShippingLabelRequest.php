<?php

namespace Sunaoka\Aws\Structures\ImportExport\GetShippingLabel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $jobIds
 * @property string $name
 * @property string $company
 * @property string $phoneNumber
 * @property string $country
 * @property string $stateOrProvince
 * @property string $city
 * @property string $postalCode
 * @property string $street1
 * @property string $street2
 * @property string $street3
 * @property string $APIVersion
 */
class GetShippingLabelRequest extends Request
{
    /**
     * @param array{
     *     jobIds: list<string>,
     *     name?: string,
     *     company?: string,
     *     phoneNumber?: string,
     *     country?: string,
     *     stateOrProvince?: string,
     *     city?: string,
     *     postalCode?: string,
     *     street1?: string,
     *     street2?: string,
     *     street3?: string,
     *     APIVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
