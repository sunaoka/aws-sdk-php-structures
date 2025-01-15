<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateIntegrationWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Object
 * @property bool|null $EnableDynamicFieldUpdate
 * @property bool|null $IncludeDeletedRecords
 */
class SalesforceSourceProperties extends Shape
{
    /**
     * @param array{
     *     Object: string,
     *     EnableDynamicFieldUpdate?: bool|null,
     *     IncludeDeletedRecords?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
