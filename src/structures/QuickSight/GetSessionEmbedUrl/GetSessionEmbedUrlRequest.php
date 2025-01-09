<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetSessionEmbedUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $EntryPoint
 * @property int<15, 600> $SessionLifetimeInMinutes
 * @property string $UserArn
 */
class GetSessionEmbedUrlRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     EntryPoint?: string,
     *     SessionLifetimeInMinutes?: int<15, 600>,
     *     UserArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
