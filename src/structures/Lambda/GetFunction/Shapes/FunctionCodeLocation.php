<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RepositoryType
 * @property string $Location
 * @property string $ImageUri
 * @property string $ResolvedImageUri
 * @property string $SourceKMSKeyArn
 */
class FunctionCodeLocation extends Shape
{
    /**
     * @param array{
     *     RepositoryType?: string,
     *     Location?: string,
     *     ImageUri?: string,
     *     ResolvedImageUri?: string,
     *     SourceKMSKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
