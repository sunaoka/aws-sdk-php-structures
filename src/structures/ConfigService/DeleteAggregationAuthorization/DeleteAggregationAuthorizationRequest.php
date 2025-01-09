<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteAggregationAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthorizedAccountId
 * @property string $AuthorizedAwsRegion
 */
class DeleteAggregationAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     AuthorizedAccountId: string,
     *     AuthorizedAwsRegion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
