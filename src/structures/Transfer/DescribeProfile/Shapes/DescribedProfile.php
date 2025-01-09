<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $ProfileId
 * @property 'LOCAL'|'PARTNER' $ProfileType
 * @property string $As2Id
 * @property list<string> $CertificateIds
 * @property list<Tag> $Tags
 */
class DescribedProfile extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     ProfileId?: string,
     *     ProfileType?: 'LOCAL'|'PARTNER',
     *     As2Id?: string,
     *     CertificateIds?: list<string>,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
