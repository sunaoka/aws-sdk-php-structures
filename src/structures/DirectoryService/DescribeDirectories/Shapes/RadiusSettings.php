<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $RadiusServers
 * @property int<1025, 65535> $RadiusPort
 * @property int<1, 50> $RadiusTimeout
 * @property int<0, 10> $RadiusRetries
 * @property string $SharedSecret
 * @property 'PAP'|'CHAP'|'MS-CHAPv1'|'MS-CHAPv2' $AuthenticationProtocol
 * @property string $DisplayLabel
 * @property bool $UseSameUsername
 */
class RadiusSettings extends Shape
{
    /**
     * @param array{
     *     RadiusServers?: list<string>,
     *     RadiusPort?: int<1025, 65535>,
     *     RadiusTimeout?: int<1, 50>,
     *     RadiusRetries?: int<0, 10>,
     *     SharedSecret?: string,
     *     AuthenticationProtocol?: 'PAP'|'CHAP'|'MS-CHAPv1'|'MS-CHAPv2',
     *     DisplayLabel?: string,
     *     UseSameUsername?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
