<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\GetApplicationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Actions
 * @property list<string> $PrincipalOrgIDs
 * @property list<string> $Principals
 * @property string $StatementId
 */
class ApplicationPolicyStatement extends Shape
{
    /**
     * @param array{
     *     Actions: list<string>,
     *     PrincipalOrgIDs?: list<string>,
     *     Principals: list<string>,
     *     StatementId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
