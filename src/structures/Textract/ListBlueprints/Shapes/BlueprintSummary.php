<?php

namespace Sunaoka\Aws\Structures\Textract\ListBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BlueprintArn
 * @property string|null $BlueprintName
 * @property string|null $BlueprintVersion
 * @property 'ACCOUNT'|'SERVICE'|null $ResourceOwner
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class BlueprintSummary extends Shape
{
    /**
     * @param array{
     *     BlueprintArn: string,
     *     BlueprintName?: string|null,
     *     BlueprintVersion?: string|null,
     *     ResourceOwner?: 'ACCOUNT'|'SERVICE'|null,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
