<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackRefactorActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MOVE'|'CREATE'|null $Action
 * @property 'RESOURCE'|'STACK'|null $Entity
 * @property string|null $PhysicalResourceId
 * @property string|null $ResourceIdentifier
 * @property string|null $Description
 * @property 'AUTO'|'MANUAL'|null $Detection
 * @property string|null $DetectionReason
 * @property list<Tag>|null $TagResources
 * @property list<string>|null $UntagResources
 * @property ResourceMapping|null $ResourceMapping
 */
class StackRefactorAction extends Shape
{
    /**
     * @param array{
     *     Action?: 'MOVE'|'CREATE'|null,
     *     Entity?: 'RESOURCE'|'STACK'|null,
     *     PhysicalResourceId?: string|null,
     *     ResourceIdentifier?: string|null,
     *     Description?: string|null,
     *     Detection?: 'AUTO'|'MANUAL'|null,
     *     DetectionReason?: string|null,
     *     TagResources?: list<Tag>|null,
     *     UntagResources?: list<string>|null,
     *     ResourceMapping?: ResourceMapping|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
