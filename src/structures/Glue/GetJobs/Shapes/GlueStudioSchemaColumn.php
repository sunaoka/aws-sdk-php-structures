<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Type
 * @property string|null $GlueStudioType
 */
class GlueStudioSchemaColumn extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type?: string|null,
     *     GlueStudioType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
