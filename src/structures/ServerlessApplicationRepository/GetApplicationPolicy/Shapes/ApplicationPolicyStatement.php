<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\GetApplicationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Actions
 * @property list<string>|null $PrincipalOrgIDs
 * @property list<string> $Principals
 * @property string|null $StatementId
 */
class ApplicationPolicyStatement extends Shape
{
    /**
     * @param array{
     *     Actions: list<string>,
     *     PrincipalOrgIDs?: list<string>|null,
     *     Principals: list<string>,
     *     StatementId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
