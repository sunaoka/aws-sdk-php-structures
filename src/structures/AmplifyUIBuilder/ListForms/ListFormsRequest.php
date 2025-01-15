<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ListForms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListFormsRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
