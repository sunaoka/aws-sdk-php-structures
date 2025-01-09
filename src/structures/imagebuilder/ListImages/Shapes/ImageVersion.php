<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property 'AMI'|'DOCKER' $type
 * @property string $version
 * @property 'Windows'|'Linux'|'macOS' $platform
 * @property string $osVersion
 * @property string $owner
 * @property string $dateCreated
 * @property 'USER_INITIATED'|'SCHEDULED'|'IMPORT'|'IMPORT_ISO' $buildType
 * @property 'AMAZON_MANAGED'|'AWS_MARKETPLACE'|'IMPORTED'|'CUSTOM' $imageSource
 */
class ImageVersion extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     type?: 'AMI'|'DOCKER',
     *     version?: string,
     *     platform?: 'Windows'|'Linux'|'macOS',
     *     osVersion?: string,
     *     owner?: string,
     *     dateCreated?: string,
     *     buildType?: 'USER_INITIATED'|'SCHEDULED'|'IMPORT'|'IMPORT_ISO',
     *     imageSource?: 'AMAZON_MANAGED'|'AWS_MARKETPLACE'|'IMPORTED'|'CUSTOM'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
