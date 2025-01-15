<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseBundles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $pageToken
 * @property bool|null $includeInactive
 */
class GetRelationalDatabaseBundlesRequest extends Request
{
    /**
     * @param array{
     *     pageToken?: string|null,
     *     includeInactive?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
