<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetTemplateSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceType
 * @property list<string> $LogicalResourceIds
 * @property list<string> $ResourceIdentifiers
 */
class ResourceIdentifierSummary extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string,
     *     LogicalResourceIds?: list<string>,
     *     ResourceIdentifiers?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
