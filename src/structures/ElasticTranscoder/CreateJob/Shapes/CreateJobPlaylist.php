<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Format
 * @property list<string>|null $OutputKeys
 * @property HlsContentProtection|null $HlsContentProtection
 * @property PlayReadyDrm|null $PlayReadyDrm
 */
class CreateJobPlaylist extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Format?: string|null,
     *     OutputKeys?: list<string>|null,
     *     HlsContentProtection?: HlsContentProtection|null,
     *     PlayReadyDrm?: PlayReadyDrm|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
