<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property 'AMI'|'DOCKER'|null $type
 * @property string|null $version
 * @property 'Windows'|'Linux'|'macOS'|null $platform
 * @property string|null $osVersion
 * @property string|null $owner
 * @property string|null $dateCreated
 * @property 'USER_INITIATED'|'SCHEDULED'|'IMPORT'|'IMPORT_ISO'|null $buildType
 * @property 'AMAZON_MANAGED'|'AWS_MARKETPLACE'|'IMPORTED'|'CUSTOM'|null $imageSource
 */
class ImageVersion extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     type?: 'AMI'|'DOCKER'|null,
     *     version?: string|null,
     *     platform?: 'Windows'|'Linux'|'macOS'|null,
     *     osVersion?: string|null,
     *     owner?: string|null,
     *     dateCreated?: string|null,
     *     buildType?: 'USER_INITIATED'|'SCHEDULED'|'IMPORT'|'IMPORT_ISO'|null,
     *     imageSource?: 'AMAZON_MANAGED'|'AWS_MARKETPLACE'|'IMPORTED'|'CUSTOM'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
