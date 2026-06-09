<?php

namespace Sunaoka\Aws\Structures\Odb\GetAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateDirectoryName
 * @property string|null $certificateId
 * @property string $directoryName
 * @property string $okvKmsKey
 * @property string $okvUri
 */
class OkvEncryptionKeyConfiguration extends Shape
{
    /**
     * @param array{
     *     certificateDirectoryName: string,
     *     certificateId?: string|null,
     *     directoryName: string,
     *     okvKmsKey: string,
     *     okvUri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
