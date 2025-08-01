<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Floating'|'Docked'|null $toolbarType
 * @property 'Dark'|'Light'|null $visualMode
 * @property list<'Windows'|'DualMonitor'|'FullScreen'|'Webcam'|'Microphone'>|null $hiddenToolbarItems
 * @property 'size4096X2160'|'size3840X2160'|'size3440X1440'|'size2560X1440'|'size1920X1080'|'size1280X720'|'size1024X768'|'size800X600'|null $maxDisplayResolution
 */
class ToolbarConfiguration extends Shape
{
    /**
     * @param array{
     *     toolbarType?: 'Floating'|'Docked'|null,
     *     visualMode?: 'Dark'|'Light'|null,
     *     hiddenToolbarItems?: list<'Windows'|'DualMonitor'|'FullScreen'|'Webcam'|'Microphone'>|null,
     *     maxDisplayResolution?: 'size4096X2160'|'size3840X2160'|'size3440X1440'|'size2560X1440'|'size1920X1080'|'size1280X720'|'size1024X768'|'size800X600'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
