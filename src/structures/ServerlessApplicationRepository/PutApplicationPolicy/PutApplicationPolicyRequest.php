<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\PutApplicationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property list<Shapes\ApplicationPolicyStatement> $Statements
 */
class PutApplicationPolicyRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     Statements: list<Shapes\ApplicationPolicyStatement>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
