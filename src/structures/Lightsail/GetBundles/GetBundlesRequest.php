<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBundles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $includeInactive
 * @property string $pageToken
 * @property 'LfR' $appCategory
 */
class GetBundlesRequest extends Request
{
    /**
     * @param array{
     *     includeInactive?: bool,
     *     pageToken?: string,
     *     appCategory?: 'LfR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
