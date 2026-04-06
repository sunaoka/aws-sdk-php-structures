<?php

namespace Sunaoka\Aws\Structures\DynamoDb\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $Policy
 * @property string|null $ExpectedRevisionId
 * @property bool|null $ConfirmRemoveSelfResourceAccess
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Policy: string,
     *     ExpectedRevisionId?: string|null,
     *     ConfirmRemoveSelfResourceAccess?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
