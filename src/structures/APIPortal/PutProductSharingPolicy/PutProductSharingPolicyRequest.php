<?php

namespace Sunaoka\Aws\Structures\APIPortal\PutProductSharingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 * @property string $policyDocument
 * @property array<string, string>|null $tags
 */
class PutProductSharingPolicyRequest extends Request
{
    /**
     * @param array{
     *     productId: string,
     *     policyDocument: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
