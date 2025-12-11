<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\CreateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $ObjectKey
 * @property string|null $VersionId
 */
class DefinitionS3Location extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     ObjectKey: string,
     *     VersionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
