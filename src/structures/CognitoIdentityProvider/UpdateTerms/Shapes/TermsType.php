<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TermsId
 * @property string $UserPoolId
 * @property string $ClientId
 * @property string $TermsName
 * @property 'LINK' $TermsSource
 * @property 'NONE' $Enforcement
 * @property array<string, string> $Links
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 */
class TermsType extends Shape
{
    /**
     * @param array{
     *     TermsId: string,
     *     UserPoolId: string,
     *     ClientId: string,
     *     TermsName: string,
     *     TermsSource: 'LINK',
     *     Enforcement: 'NONE',
     *     Links: array<string, string>,
     *     CreationDate: \Aws\Api\DateTimeResult,
     *     LastModifiedDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
