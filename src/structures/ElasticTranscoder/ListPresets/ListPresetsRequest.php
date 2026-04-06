<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListPresets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Ascending
 * @property string|null $PageToken
 */
class ListPresetsRequest extends Request
{
    /**
     * @param array{
     *     Ascending?: string|null,
     *     PageToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
