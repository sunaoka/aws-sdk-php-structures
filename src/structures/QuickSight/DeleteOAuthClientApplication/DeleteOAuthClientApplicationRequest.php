<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteOAuthClientApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $OAuthClientApplicationId
 */
class DeleteOAuthClientApplicationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     OAuthClientApplicationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
