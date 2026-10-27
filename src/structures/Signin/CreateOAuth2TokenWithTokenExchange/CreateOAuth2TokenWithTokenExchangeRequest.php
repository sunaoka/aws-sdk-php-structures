<?php

namespace Sunaoka\Aws\Structures\Signin\CreateOAuth2TokenWithTokenExchange;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $grantType
 * @property string|null $subjectToken
 * @property string|null $subjectTokenType
 * @property string|null $resource
 * @property string|null $scope
 */
class CreateOAuth2TokenWithTokenExchangeRequest extends Request
{
    /**
     * @param array{
     *     grantType: string,
     *     subjectToken?: string|null,
     *     subjectTokenType?: string|null,
     *     resource?: string|null,
     *     scope?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
