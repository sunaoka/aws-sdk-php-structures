<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'Windows'|'DualMonitor'|'FullScreen'|'Webcam'|'Microphone'>|null $hiddenToolbarItems
 * @property 'size4096X2160'|'size3840X2160'|'size3440X1440'|'size2560X1440'|'size1920X1080'|'size1280X720'|'size1024X768'|'size800X600'|null $maxDisplayResolution
 * @property 'Floating'|'Docked'|null $toolbarType
 * @property 'Dark'|'Light'|null $visualMode
 */
class ToolbarConfiguration extends Shape
{
    /**
     * @param array{
     *     hiddenToolbarItems?: list<'Windows'|'DualMonitor'|'FullScreen'|'Webcam'|'Microphone'>|null,
     *     maxDisplayResolution?: 'size4096X2160'|'size3840X2160'|'size3440X1440'|'size2560X1440'|'size1920X1080'|'size1280X720'|'size1024X768'|'size800X600'|null,
     *     toolbarType?: 'Floating'|'Docked'|null,
     *     visualMode?: 'Dark'|'Light'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
