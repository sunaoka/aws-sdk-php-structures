<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Format
 * @property list<string> $OutputKeys
 * @property HlsContentProtection $HlsContentProtection
 * @property PlayReadyDrm $PlayReadyDrm
 * @property string $Status
 * @property string $StatusDetail
 */
class Playlist extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Format?: string,
     *     OutputKeys?: list<string>,
     *     HlsContentProtection?: HlsContentProtection,
     *     PlayReadyDrm?: PlayReadyDrm,
     *     Status?: string,
     *     StatusDetail?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
