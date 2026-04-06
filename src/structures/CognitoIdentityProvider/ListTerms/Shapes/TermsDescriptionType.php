<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TermsId
 * @property string $TermsName
 * @property 'NONE' $Enforcement
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 */
class TermsDescriptionType extends Shape
{
    /**
     * @param array{
     *     TermsId: string,
     *     TermsName: string,
     *     Enforcement: 'NONE',
     *     CreationDate: \Aws\Api\DateTimeResult,
     *     LastModifiedDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
