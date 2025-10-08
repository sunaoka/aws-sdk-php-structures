<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListConfigurationCheckDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SAP_CHECK_01'|'SAP_CHECK_02'|'SAP_CHECK_03'|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property list<'HANA'|'SAP_ABAP'>|null $ApplicableApplicationTypes
 */
class ConfigurationCheckDefinition extends Shape
{
    /**
     * @param array{
     *     Id?: 'SAP_CHECK_01'|'SAP_CHECK_02'|'SAP_CHECK_03'|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     ApplicableApplicationTypes?: list<'HANA'|'SAP_ABAP'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
