<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputLocation
 * @property bool $RemoveOutputLocation
 * @property EncryptionConfiguration $EncryptionConfiguration
 * @property bool $RemoveEncryptionConfiguration
 * @property string $ExpectedBucketOwner
 * @property bool $RemoveExpectedBucketOwner
 * @property AclConfiguration $AclConfiguration
 * @property bool $RemoveAclConfiguration
 */
class ResultConfigurationUpdates extends Shape
{
    /**
     * @param array{
     *     OutputLocation?: string,
     *     RemoveOutputLocation?: bool,
     *     EncryptionConfiguration?: EncryptionConfiguration,
     *     RemoveEncryptionConfiguration?: bool,
     *     ExpectedBucketOwner?: string,
     *     RemoveExpectedBucketOwner?: bool,
     *     AclConfiguration?: AclConfiguration,
     *     RemoveAclConfiguration?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
