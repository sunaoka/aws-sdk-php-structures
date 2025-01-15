<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetSessionEmbedUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string|null $EntryPoint
 * @property int<15, 600>|null $SessionLifetimeInMinutes
 * @property string|null $UserArn
 */
class GetSessionEmbedUrlRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     EntryPoint?: string|null,
     *     SessionLifetimeInMinutes?: int<15, 600>|null,
     *     UserArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
