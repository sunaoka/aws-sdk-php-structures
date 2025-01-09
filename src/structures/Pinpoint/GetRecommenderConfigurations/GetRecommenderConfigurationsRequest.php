<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetRecommenderConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PageSize
 * @property string $Token
 */
class GetRecommenderConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     PageSize?: string,
     *     Token?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
