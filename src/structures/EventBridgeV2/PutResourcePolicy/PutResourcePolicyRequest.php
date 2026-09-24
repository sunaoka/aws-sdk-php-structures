<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $PolicyDocument
 * @property string|null $PolicyName
 * @property string|null $ExpectedRevisionId
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     PolicyDocument: string,
     *     PolicyName?: string|null,
     *     ExpectedRevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
