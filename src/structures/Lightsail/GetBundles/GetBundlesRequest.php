<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBundles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $includeInactive
 * @property string|null $pageToken
 * @property 'LfR'|null $appCategory
 */
class GetBundlesRequest extends Request
{
    /**
     * @param array{
     *     includeInactive?: bool|null,
     *     pageToken?: string|null,
     *     appCategory?: 'LfR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
