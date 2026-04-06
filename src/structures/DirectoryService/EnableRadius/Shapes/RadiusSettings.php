<?php

namespace Sunaoka\Aws\Structures\DirectoryService\EnableRadius\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $RadiusServers
 * @property int<1025, 65535>|null $RadiusPort
 * @property int<1, 50>|null $RadiusTimeout
 * @property int<0, 10>|null $RadiusRetries
 * @property string|null $SharedSecret
 * @property 'PAP'|'CHAP'|'MS-CHAPv1'|'MS-CHAPv2'|null $AuthenticationProtocol
 * @property string|null $DisplayLabel
 * @property bool|null $UseSameUsername
 */
class RadiusSettings extends Shape
{
    /**
     * @param array{
     *     RadiusServers?: list<string>|null,
     *     RadiusPort?: int<1025, 65535>|null,
     *     RadiusTimeout?: int<1, 50>|null,
     *     RadiusRetries?: int<0, 10>|null,
     *     SharedSecret?: string|null,
     *     AuthenticationProtocol?: 'PAP'|'CHAP'|'MS-CHAPv1'|'MS-CHAPv2'|null,
     *     DisplayLabel?: string|null,
     *     UseSameUsername?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
