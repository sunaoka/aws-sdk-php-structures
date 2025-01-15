<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetKeyPairs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $pageToken
 * @property bool|null $includeDefaultKeyPair
 */
class GetKeyPairsRequest extends Request
{
    /**
     * @param array{
     *     pageToken?: string|null,
     *     includeDefaultKeyPair?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
