<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetRecommenderConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $PageSize
 * @property string|null $Token
 */
class GetRecommenderConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     PageSize?: string|null,
     *     Token?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
