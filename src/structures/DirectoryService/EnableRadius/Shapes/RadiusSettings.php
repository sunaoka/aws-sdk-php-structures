<?php

namespace Sunaoka\Aws\Structures\DirectoryService\EnableRadius\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $RadiusServers
 * @property int $RadiusPort
 * @property int $RadiusTimeout
 * @property int $RadiusRetries
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
     *     RadiusPort?: int,
     *     RadiusTimeout?: int,
     *     RadiusRetries?: int,
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
