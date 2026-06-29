<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RepositoryType
 * @property string|null $Location
 * @property string|null $ImageUri
 * @property string|null $ResolvedImageUri
 * @property ResolvedS3Object|null $ResolvedS3Object
 * @property string|null $SourceKMSKeyArn
 * @property FunctionCodeLocationError|null $Error
 */
class FunctionCodeLocation extends Shape
{
    /**
     * @param array{
     *     RepositoryType?: string|null,
     *     Location?: string|null,
     *     ImageUri?: string|null,
     *     ResolvedImageUri?: string|null,
     *     ResolvedS3Object?: ResolvedS3Object|null,
     *     SourceKMSKeyArn?: string|null,
     *     Error?: FunctionCodeLocationError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
