<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListPresets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Ascending
 * @property string $PageToken
 */
class ListPresetsRequest extends Request
{
    /**
     * @param array{
     *     Ascending?: string,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
