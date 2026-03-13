<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateNetworkMigrationMapperSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SHA256'|null $encryptionAlgorithm
 * @property string|null $hash
 */
class Checksum extends Shape
{
    /**
     * @param array{
     *     encryptionAlgorithm?: 'SHA256'|null,
     *     hash?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
