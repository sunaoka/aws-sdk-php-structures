<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReadAuthorizationCodeGrantMetadata|null $AuthorizationCodeGrantMetadata
 * @property ReadClientCredentialsGrantMetadata|null $ClientCredentialsGrantMetadata
 * @property ReadBasicAuthConnectionMetadata|null $BasicAuthConnectionMetadata
 * @property ReadAPIKeyConnectionMetadata|null $ApiKeyConnectionMetadata
 * @property ReadNoneConnectionMetadata|null $NoneConnectionMetadata
 * @property ReadIamConnectionMetadata|null $IamConnectionMetadata
 */
class ReadAuthenticationMetadata extends Shape
{
    /**
     * @param array{
     *     AuthorizationCodeGrantMetadata?: ReadAuthorizationCodeGrantMetadata|null,
     *     ClientCredentialsGrantMetadata?: ReadClientCredentialsGrantMetadata|null,
     *     BasicAuthConnectionMetadata?: ReadBasicAuthConnectionMetadata|null,
     *     ApiKeyConnectionMetadata?: ReadAPIKeyConnectionMetadata|null,
     *     NoneConnectionMetadata?: ReadNoneConnectionMetadata|null,
     *     IamConnectionMetadata?: ReadIamConnectionMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
