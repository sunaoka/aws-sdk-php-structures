<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseBundles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pageToken
 * @property bool $includeInactive
 */
class GetRelationalDatabaseBundlesRequest extends Request
{
    /**
     * @param array{
     *     pageToken?: string,
     *     includeInactive?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
