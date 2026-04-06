<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Format
 * @property list<string>|null $OutputKeys
 * @property HlsContentProtection|null $HlsContentProtection
 * @property PlayReadyDrm|null $PlayReadyDrm
 * @property string|null $Status
 * @property string|null $StatusDetail
 */
class Playlist extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Format?: string|null,
     *     OutputKeys?: list<string>|null,
     *     HlsContentProtection?: HlsContentProtection|null,
     *     PlayReadyDrm?: PlayReadyDrm|null,
     *     Status?: string|null,
     *     StatusDetail?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
