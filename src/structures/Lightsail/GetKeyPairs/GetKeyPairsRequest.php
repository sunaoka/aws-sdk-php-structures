<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetKeyPairs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pageToken
 * @property bool $includeDefaultKeyPair
 */
class GetKeyPairsRequest extends Request
{
    /**
     * @param array{
     *     pageToken?: string,
     *     includeDefaultKeyPair?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
