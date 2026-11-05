<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $responsibilityCodes
 * @property string|null $taxpayerTypeCode
 * @property string|null $issueDate
 */
class ColombiaAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     responsibilityCodes?: list<string>|null,
     *     taxpayerTypeCode?: string|null,
     *     issueDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
