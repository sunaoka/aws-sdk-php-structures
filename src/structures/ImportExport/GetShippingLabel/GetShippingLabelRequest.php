<?php

namespace Sunaoka\Aws\Structures\ImportExport\GetShippingLabel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $jobIds
 * @property string|null $name
 * @property string|null $company
 * @property string|null $phoneNumber
 * @property string|null $country
 * @property string|null $stateOrProvince
 * @property string|null $city
 * @property string|null $postalCode
 * @property string|null $street1
 * @property string|null $street2
 * @property string|null $street3
 * @property string|null $APIVersion
 */
class GetShippingLabelRequest extends Request
{
    /**
     * @param array{
     *     jobIds: list<string>,
     *     name?: string|null,
     *     company?: string|null,
     *     phoneNumber?: string|null,
     *     country?: string|null,
     *     stateOrProvince?: string|null,
     *     city?: string|null,
     *     postalCode?: string|null,
     *     street1?: string|null,
     *     street2?: string|null,
     *     street3?: string|null,
     *     APIVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
