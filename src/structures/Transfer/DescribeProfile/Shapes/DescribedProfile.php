<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string|null $ProfileId
 * @property 'LOCAL'|'PARTNER'|null $ProfileType
 * @property string|null $As2Id
 * @property list<string>|null $CertificateIds
 * @property list<Tag>|null $Tags
 */
class DescribedProfile extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     ProfileId?: string|null,
     *     ProfileType?: 'LOCAL'|'PARTNER'|null,
     *     As2Id?: string|null,
     *     CertificateIds?: list<string>|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
