<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutJobSuccessResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $revision
 * @property string $changeIdentifier
 * @property \Aws\Api\DateTimeResult|null $created
 * @property string|null $revisionSummary
 */
class CurrentRevision extends Shape
{
    /**
     * @param array{
     *     revision: string,
     *     changeIdentifier: string,
     *     created?: \Aws\Api\DateTimeResult|null,
     *     revisionSummary?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
