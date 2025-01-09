<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateIntegrationWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Object
 * @property bool $EnableDynamicFieldUpdate
 * @property bool $IncludeDeletedRecords
 */
class SalesforceSourceProperties extends Shape
{
    /**
     * @param array{
     *     Object: string,
     *     EnableDynamicFieldUpdate?: bool,
     *     IncludeDeletedRecords?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
