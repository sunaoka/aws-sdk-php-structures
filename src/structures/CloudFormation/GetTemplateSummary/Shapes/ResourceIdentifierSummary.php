<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetTemplateSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property list<string>|null $LogicalResourceIds
 * @property list<string>|null $ResourceIdentifiers
 */
class ResourceIdentifierSummary extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     LogicalResourceIds?: list<string>|null,
     *     ResourceIdentifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
