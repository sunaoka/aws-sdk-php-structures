<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string|null $ExpectedRevisionId
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     ExpectedRevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
