<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateDataAccessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_IAM_IDC_TTI'|'AWS_IAM_IDC_AUTH_CODE' $authenticationType
 * @property DataAccessorAuthenticationConfiguration|null $authenticationConfiguration
 * @property list<string>|null $externalIds
 */
class DataAccessorAuthenticationDetail extends Shape
{
    /**
     * @param array{
     *     authenticationType: 'AWS_IAM_IDC_TTI'|'AWS_IAM_IDC_AUTH_CODE',
     *     authenticationConfiguration?: DataAccessorAuthenticationConfiguration|null,
     *     externalIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
