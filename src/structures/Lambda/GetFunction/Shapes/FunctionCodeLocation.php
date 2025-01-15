<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RepositoryType
 * @property string|null $Location
 * @property string|null $ImageUri
 * @property string|null $ResolvedImageUri
 * @property string|null $SourceKMSKeyArn
 */
class FunctionCodeLocation extends Shape
{
    /**
     * @param array{
     *     RepositoryType?: string|null,
     *     Location?: string|null,
     *     ImageUri?: string|null,
     *     ResolvedImageUri?: string|null,
     *     SourceKMSKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
