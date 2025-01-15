<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OutputLocation
 * @property bool|null $RemoveOutputLocation
 * @property EncryptionConfiguration|null $EncryptionConfiguration
 * @property bool|null $RemoveEncryptionConfiguration
 * @property string|null $ExpectedBucketOwner
 * @property bool|null $RemoveExpectedBucketOwner
 * @property AclConfiguration|null $AclConfiguration
 * @property bool|null $RemoveAclConfiguration
 */
class ResultConfigurationUpdates extends Shape
{
    /**
     * @param array{
     *     OutputLocation?: string|null,
     *     RemoveOutputLocation?: bool|null,
     *     EncryptionConfiguration?: EncryptionConfiguration|null,
     *     RemoveEncryptionConfiguration?: bool|null,
     *     ExpectedBucketOwner?: string|null,
     *     RemoveExpectedBucketOwner?: bool|null,
     *     AclConfiguration?: AclConfiguration|null,
     *     RemoveAclConfiguration?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
